var textLoading = '<div class="bg-light text-center text-uppercase p-5"><div class="fa-3x"><i class="fas fa-sync fa-spin"></i></div><h4>Carregando...</h4></div>';
var contentStore = document.getElementById("store-list");
var campoMunicipio = document.getElementById("campo-municipio");
var campoBairro = document.getElementById("campo-bairro");

function printOptions (listPrint = false, localPrint = false, namePrint = '', msgPrint = '') {
    if (listPrint && localPrint) {
        localPrint.innerHTML='';
        if (listPrint.length > 0) {
            localPrint.disabled = false;
            var opt = document.createElement("option");
            opt.value = '';
            opt.text = msgPrint;
            opt.disabled = true;
            opt.selected = true;
            localPrint.add(opt, null);
            for (var singlePrint of listPrint) {
                var opt = document.createElement("option");
                opt.value = singlePrint.slug;
                opt.text = singlePrint.name;
                localPrint.add(opt, null);
            }
        }
        else {
            localPrint.disabled = true;
            var opt = document.createElement("option");
            opt.value = '';
            opt.text = 'Só há 1 opção de ' + namePrint;
            opt.disabled = true;
            opt.selected = true;
            localPrint.add(opt, null);
        }
    }
}

if (municipios) {
    printOptions(municipios, campoMunicipio, 'município', 'Selecione um município');
}

function printStores(responseStores) {
    var contentTextStores = '';
    var isReverse = 0;
    for (let storeCurrent of responseStores) {
        var textReverse = (isReverse) ? 'md:flex-row-reverse': '';
        contentTextStores+='<div class="rounded-xl overflow-hidden shadow-lg shadow-gray-300 my-4 md:flex items-stretch ' + textReverse + '"><div class="md:w-1/2">' + storeCurrent.mapa + '</div><div class="md:w-1/2 p-16"><h1 class="text-2xl text-red-700 font-medium uppercase pb-4">' + storeCurrent.category + '</h1><div class="text-xl text-gray-700 font-bold uppercase pb-4">' + storeCurrent.title + '</div><hr class="border-gray-200 my-4"><div class="py-3 uppercase font-medium font-reading text-gray-500">' + storeCurrent.content + '</div><a href="' + storeCurrent.link + '" target="_blank"><button type="button" class="bg-red-700 text-gray-100 hover:bg-red-800 hover:text-gray-100 font-medium rounded-full my-4 py-2 px-10 block text-base uppercase">Ver Mapa</button></a></div></div>';
        isReverse = (isReverse) ? 0 : 1;
    }
    contentStore.innerHTML=contentTextStores;
}


campoMunicipio.addEventListener('change', function (event) {
    var municipioSelecionado = campoMunicipio.value;
    var municipioCurrent = municipios.find(municipios => municipios.slug == municipioSelecionado);
    var listaBairros = municipioCurrent.bairro;
    printOptions(listaBairros, campoBairro, 'bairro', 'Selecione um bairro');
    actionSubmit(municipioSelecionado);
});

campoBairro.addEventListener('change', function (event) {
    var municipioSelecionado = campoBairro.value;
    actionSubmit(municipioSelecionado);
});

function actionSubmit(valueData = false) {
    contentStore.innerHTML=textLoading;
    var localAtual = valueData;
    
    if (localAtual) {
        const form = new FormData();
        form.append('action', store_object.action);
        form.append('local', localAtual);
        const params = new URLSearchParams(form);

        fetch(search_object.location, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded', 'Cache-Control': 'no-cache', },
            body: params
        }).then(function (responseCookie) {
            responseCookie.json().then((responseDataCookie) => {
                printStores(responseDataCookie);
            });
        }).catch();
    }
}
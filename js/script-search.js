
// ÁREA DE PESQUISA
var headerSearch = document.getElementById('header-search');
// FORMULÁRIO DE PESQUISA
var searchForm = document.getElementById('search-form');
// CAMPO DE PESQUISA
var searchInput = document.getElementById('search-input');
// ÁREA ONDE A PESQUISA É MOSTRADA
var searchArea = document.getElementById('search-area');
// LOCAL DO RESULTADO DA PESQUISA
var searchInsert = document.getElementById('search-insert');


searchInput.addEventListener('focus', function () {
    searchArea.classList.remove('hidden');
});

document.addEventListener('click', function (event) {
    var isClickInside = headerSearch.contains(event.target);

    if (!isClickInside) {
        searchArea.classList.add('hidden');
    }
});

headerSearch.addEventListener('click', function () {
    searchArea.classList.remove('hidden');
});

function delayKeyup(callback, ms) {
    var timer = 0;
    return function () {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, ms || 0);
    };
}

function actionSubmit() {
    var contentSearch = searchInput.value;

    const form = new FormData();
    form.append('action', search_object.action);
    form.append('search', contentSearch);
    const params = new URLSearchParams(form);

    fetch(search_object.location, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded', 'Cache-Control': 'no-cache', },
        body: params
    }).then(function (responseCookie) {
        responseCookie.json().then((responseDataCookie) => {
            console.log(responseDataCookie);
            var pages = '';
            var tips = '';
            var stores = '';
            if (responseDataCookie.pages.length > 0) {
                pages = '<div class="mb-2"><h3 class="uppercase text-red-700 font-bold py-2">Páginas</h3><div class="grid grid-cols-3 gap-1 text-xs uppercase" id="autosuggest-page">';
                for (let pagesCurrent of responseDataCookie.pages) {
                    pages += '<div><a href="' + pagesCurrent.link + '" class="bg-red-700 text-white rounded hover:bg-red-800 p-2 block">' + pagesCurrent.icon + pagesCurrent.name + '</a></div>';
                }
                pages += '</div></div>';
            }

            if (responseDataCookie.tips.length > 0) {
                tips = '<div class="mb-2"><h3 class="uppercase text-red-700 font-bold py-2">Dicas e Receitas</h3><div class="grid grid-cols-2 gap-2 text-sm" id="autosuggest-tip">';
                for (let storeCurrent of responseDataCookie.tips) {
                    tips += '<div class="bg-gray-100 hover:bg-gray-200 rounded-lg overflow-hidden"><a href="' + storeCurrent.link + '"><div class="flex h-full"><div class="w-2/6"><div class="w-full h-full bg-center bg-cover" style="background-image: url(\'' + storeCurrent.img + '\');"></div></div><div class="w-4/6 p-3"><h4>' + storeCurrent.title + '</h4></div></div></a></div>';
                }
                tips += '</div></div>';
            }


            if (responseDataCookie.stores.length > 0) {
                stores = '<div class="mb-2"><h3 class="uppercase text-red-700 font-bold py-2">Lojas</h3><div class="grid grid-cols-2 gap-2" id="autosuggest-store">';
                for (let storeCurrent of responseDataCookie.stores) {
                    stores += '<div class="bg-gray-100 hover:bg-gray-200 p-2 rounded-lg"><a href="' + storeCurrent.link + '"><div class="flex items-center"><div class="px-3 text-red-700"><i class="fas fa-map-marker-alt fa-2x"></i></div><div><h4 class="text-red-700 uppercase text-base">' + storeCurrent.title + '</h4><p class="text-xs">' + storeCurrent.content + '</p></div></div></a></div>';
                }
                stores += '</div></div>';
            }
            if (pages || tips || stores) {
                searchInsert.innerHTML = (pages + tips + stores);
            }
            else {
                searchInsert.innerHTML = '<p>Não há nenhum dado de pesquisa</p>'
            }
            headerSearch.classList.remove('hidden');
        });
    }).catch();
}

searchInput.addEventListener('keyup', delayKeyup(function (e) {
    actionSubmit();
}));
searchForm.addEventListener('submit', function (e) {
    actionSubmit();
    e.preventDefault();
});
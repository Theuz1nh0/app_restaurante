function carregarPHP() {
    const page = document.getElementById('page')
    let ajax = new XMLHttpRequest();
    let url =  'http://localhost/projetos_fullstack/app_restaurante/api/index.php'
    // let url =  'http://localhost/projetos_fullstack/app_restaurante/api/index.php'

    ajax.open('GET', url);

    ajax.onreadystatechange = () => {
        if(ajax.readyState == 4 && ajax.status) {
            // console.log(ajax.responseText)
            page.innerHTML = ajax.responseText
        }
    }

    ajax.send();
}
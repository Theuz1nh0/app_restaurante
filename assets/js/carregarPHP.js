function carregarPHP() {
    const page = document.getElementById('page')
    let ajax = new XMLHttpRequest();
    // to local development
    // let url =  'http://localhost/projetos_fullstack/app_restaurante/api/index.php'

    let url =  'https://app-restaurante-three.vercel.app/api/index.php'

    ajax.open('GET', url);

    ajax.onreadystatechange = () => {
        if(ajax.readyState == 4 && ajax.status) {
            // console.log(ajax.responseText)
            page.innerHTML = ajax.responseText
        }
    }

    ajax.send();
}
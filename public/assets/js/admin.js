document.querySelector('#doctor-form').addEventListener('click', function(e){
    const target = e.target;
    if(target.matches('input')){
        target.setAttribute('class', 'text-primary');
    }
});


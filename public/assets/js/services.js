const service = document.querySelector('#services')
const servTextInt = document.querySelector('#services-text-int')
const servTextOb = document.querySelector('#services-text-ob')
const head = document.querySelector('#heads')
service.addEventListener('mouseover', function(e){
    const target = e.target;
    servTextInt.setAttribute('class', 'container border border-3 rounded text-info')
    servTextOb.setAttribute('class', 'container border border-3 rounded text-info')
    head.setAttribute('class', 'text-uppercase text-center mb-2 text-info fs-1')
    if(target.matches('a')){
        target.setAttribute('class', 'text-uppercase text-muted-primary ')
    }
    
});
service.addEventListener('mouseout', function(e){
    const target = e.target;
    servTextInt.setAttribute('class', 'container border border-3 rounded')
    servTextOb.setAttribute('class', 'container border border-3 rounded')
    head.setAttribute('class', 'text-uppercase text-center mb-2')
    if(target.matches('a')){
        target.setAttribute('class', '')
    }
    
    
}); 

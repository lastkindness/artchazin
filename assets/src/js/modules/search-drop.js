export default () => {
    console.log('test2');
    document.getElementById("search").addEventListener('click',function (){
        document.getElementById('drop').classList.add('active');
        console.log('test');
    })

};

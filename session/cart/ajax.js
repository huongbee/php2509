// var data = {
//     "id": 10
// }
// $.post('add-to-cart.php',data,function(response){
//     console.log(response)
// })
// $.get('add-to-cart.php',data,function(response){
//     console.log(response)
// })
$.ajax({
    'type':'POST',
    'url': 'add-to-cart.php',
    'data':{
        "id": 10,
        "name":'KPT'
    },
    // 'dataType':'JSON',
    success:function(response){
        // response = JSON.parse(response)
        console.log(typeof response)
        console.log(response)
        console.log(response.id)
        console.log(response.name)
    },
    error:function(err){
        // console.log(err.responseText)
        // console.log(err.statusText)
        // console.log(err)
    }
}).done(function(response){
    // console.log(response)
    // alert('done!!')
})
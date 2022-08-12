$(document).ready(function(){
    
  
    var form=$('#myform');
        $('#submit').click(function(){

$.ajax({
url:'admininsertphp.php',
type:'POST',
data:$("#myform input").serialize(),
success:function(data){
console.log(data);
}

});
 });
    
 $('#dataentry').click(function(){
$.get('appdetailfillform.php',function(data,status){
$("#datashow").html(data);
console.log(status);
})


 });

$("#datadisplay").click(function(){


    $.ajax({

        url:'ajaxdisplay.php',
        type:'POST',
        success:function(getdata){
$('#response').html(getdata);

        }
    });

});

$("#deleteash").click(function(){
	
	alert("clicked");
	
	
});



});

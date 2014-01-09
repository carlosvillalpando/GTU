(function(window){
	function test_server(){
		var datos = {
			cabecera:'Carlos Miau'
		};

		App.current.getServer('test.php', datos, function(perro){

			console.log(perro.Respuesta+' miau');
		});
		
	}


test_server();
})(window);

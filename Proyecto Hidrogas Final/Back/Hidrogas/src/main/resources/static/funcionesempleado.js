function eliminar(id) {
	swal({
		title: "¿Está seguro de Eliminar?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
		.then((OK) => {
			if (OK) {
				$.ajax({
					url:"/eliminarempleado/" + id,
					success: function(res){
						console.log(res)
					}
				});
				swal("Se ha eliminado correctamente!", {
					icon: "success",
				}).then((ok)=>{
					if(ok){
						location.href="/consultarempleado"
					}
				});
			} else {
				swal("No se eliminó este registro!");
			}
		});
}
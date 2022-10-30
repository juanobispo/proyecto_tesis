$(document).ready(function(){
	//carga
	$("#carga_card").hide();
	
	$("#submit-orden").hide();

	$("#add_client").click(function(e){
				e.preventDefault();
				var action = $("form#form_cliente").attr("action");
				var formData = $("form#form_cliente").serialize();
				$.ajax({
					url: action,
					type: "POST",
					data: formData,
					beforeSend:function(response){ 
						$("#add_client").attr('disabled','disabled');
					},
					success: function (e) {
						$("#add_client").removeAttr('disabled');
						//console.log(e);
						//console.log(e['rsl']);
						$("form#form_cliente")[0].reset();
						if(e['rsl']>0){
							Swal.fire({
							position: 'center',
							icon: 'success',
							title: 'Cliente registrado exitosamente',
							showConfirmButton: false,
							timer: 3500
							});
						}
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
				});
	});
	
	$("#add_empleado").click(function(e){
				e.preventDefault();
				var action = $("form#registrar").attr("action");
				var formData = $("form#registrar").serialize();
				$.ajax({
					url: action,
					type: "POST",
					data: formData,
					beforeSend:function(response){ 
						$("#add_empleado").attr('disabled','disabled');
					},
					success: function (e) {
						$("#add_empleado").removeAttr('disabled');
						//console.log(e);
						//console.log(e['rsl']);
						$("form#registrar")[0].reset();
						
						if(e['rsl']>0){
							Swal.fire({
							position: 'center',
							icon: 'success',
							title: 'Usuario registrado exitosamente',
							showConfirmButton: false,
							timer: 3500
							});
						}
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
				});
	});
	
	$("#add_product").click(function(e){
				e.preventDefault();
				var action = $("form#formproduct").attr("action");
				var formData = $("form#formproduct").serialize();
				//console.log(formData);
				$.ajax({
					url: action,
					type: "POST",
					data: formData,
					beforeSend:function(response){ 
						$("#add_product").attr('disabled','disabled');
					},
					success: function (e) {
						$("#add_product").removeAttr('disabled');
						$("form#formproduct")[0].reset();
						
						if(e['rsl']>0){
							Swal.fire({
								position: 'center',
								icon: 'success',
								title: 'Producto registrado exitosamente',
								showConfirmButton: false,
								timer: 3500
							});
						}
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
				});
	});
	
	$("#add_asociar").click(function(e){
				e.preventDefault();
				var action = $("form#form_asociar").attr("action");
				var formData = $("form#form_asociar").serialize();
				//console.log(formData);
				$.ajax({
					url: action,
					type: "POST",
					data: formData,
					beforeSend:function(response){ 
						$("#add_asociar").attr('disabled','disabled');
					},
					success: function (e) {
						$("#add_asociar").removeAttr('disabled');
						
						if(e['rsl']>0){
							$("form#form_asociar")[0].reset();
							Swal.fire({
								position: 'center',
								icon: 'success',
								title: 'Producto asignado exitosamente',
								showConfirmButton: false,
								timer: 3500
							});
						}else{
							const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 3000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							});

							Toast.fire({
								icon: 'success',
								title: 'El cliente ya posee este producto'
							});
						}
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
				});
	});

	$("#add_orden").click(function(e){
		e.preventDefault();
				var action = $("form#form_orden").attr("action");
				var formData = $("form#form_orden").serialize();
				console.log(formData);
				$.ajax({
						url: action,
						type: "POST",
						data: formData,
						beforeSend:function(response){ 
							//$("#add_orden").attr('disabled','disabled');
							$("#carga_card").show();
						},
						success: function (e) {
							$("#carga_card").hide();
							//$("#add_orden").removeAttr('disabled');
							//console.log(e);
							
							if(e['rsl']>0){
								$("form#form_orden")[0].reset();
								Swal.fire({
									position: 'center',
									icon: 'success',
									title: 'Producto asignado exitosamente',
									showConfirmButton: false,
									timer: 3500
								});
							}
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log(xhr.status);
							console.log(thrownError);
							console.log(ajaxOptions);
						}
				});
	});
	
	$("#buscar_orden").click(function(e){
		e.preventDefault();
				var action = $("form#form_orden_edit").attr("action");
				var formData = $("form#form_orden_edit").serialize();
				console.log(formData);
				$.ajax({
						url: action,
						type: "POST",
						data: formData,
						beforeSend:function(response){ 
							//$("#buscar_orden").attr('disabled','disabled');
							//$("#carga_card").show();
						},
						success: function (e) {
							//$("#carga_card").hide();
							//$("#buscar_orden").removeAttr('disabled');
							//console.log(e);
							$("#zona_word").html(e);
							/*if(e['rsl']>0){
								$("form#form_orden_edit")[0].reset();
								Swal.fire({
									position: 'center',
									icon: 'success',
									title: 'Producto asignado exitosamente',
									showConfirmButton: false,
									timer: 3500
								});
							}*/
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log(xhr.status);
							console.log(thrownError);
							console.log(ajaxOptions);
						}
				});
	});

	$("#buscar_orden_super").click(function(e){
		e.preventDefault();
				var action = $("form#form_orden_supervisor").attr("action");
				var formData = $("form#form_orden_supervisor").serialize();
				console.log(formData);
				$.ajax({
						url: action,
						type: "POST",
						data: formData,
						beforeSend:function(response){ 
							//$("#buscar_orden").attr('disabled','disabled');
							//$("#carga_card").show();
						},
						success: function (e) {
							//$("#carga_card").hide();
							//$("#buscar_orden").removeAttr('disabled');
							//console.log(e);
							$("#zona_word").html(e);
							/*if(e['rsl']>0){
								$("form#form_orden_edit")[0].reset();
								Swal.fire({
									position: 'center',
									icon: 'success',
									title: 'Producto asignado exitosamente',
									showConfirmButton: false,
									timer: 3500
								});
							}*/
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log(xhr.status);
							console.log(thrownError);
							console.log(ajaxOptions);
						}
				});
	});

	$("#add_extruden").click(function(e){
		e.preventDefault();

				$("#id_orden_ext").val($("#id_orden_add").val());

				var action 	 = $("form#registrar_extruden").attr("action");
				var formData = $("form#registrar_extruden").serialize();
				console.log(formData);
				$.ajax({
						url: action,
						type: "POST",
						data: formData,
						beforeSend:function(response){ 
							//$("#buscar_orden").attr('disabled','disabled');
							$("#carga_card").show();
						},
						success: function (e) {
							$("#carga_card").hide();
							//$("#buscar_orden").removeAttr('disabled');
							console.log(e);
							//$("#zona_word").html(e);
							if(e['rsl']>0){
								$("form#registrar_extruden")[0].reset();
								Swal.fire({
									position: 'center',
									icon: 'success',
									title: 'Producto asignado exitosamente',
									showConfirmButton: false,
									timer: 3500
								});
								
								$("#buscar_orden").click();
							}
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log(xhr.status);
							console.log(thrownError);
							console.log(ajaxOptions);
						}
				});		
	});
	
	//produccion
	$("#add_product_ext").click(function(e){
		e.preventDefault();
				//$("#id_orden_ext").val($("#id_orden_add").val());
				var action 	 = $("form#registrar_prodct_ext").attr("action");
				var formData = $("form#registrar_prodct_ext").serialize();
				console.log(formData);
				$.ajax({
						url: action,
						type: "POST",
						data: formData,
						beforeSend:function(response){ 
							$("#carga_card").show();
						},
						success: function (e) {
							$("#carga_card").hide();
							//console.log(e);
							if(e['rsl']>0){
								$("form#registrar_prodct_ext")[0].reset();
								Swal.fire({
									position: 'center',
									icon: 'success',
									title: 'Producto asignado exitosamente',
									showConfirmButton: false,
									timer: 1500,
								});
								   location.reload();
							}
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log(xhr.status);
							console.log(thrownError);
							console.log(ajaxOptions);
						}
				});		
	});

	$("#add_product_imp").click(function(e){
		e.preventDefault();

				//$("#id_orden_ext").val($("#id_orden_add").val());

				var action 	 = $("form#registrar_prodct_imp").attr("action");
				var formData = $("form#registrar_prodct_imp").serialize();
				console.log(formData);
				$.ajax({
						url: action,
						type: "POST",
						data: formData,
						beforeSend:function(response){ 
							
							$("#carga_card").show();
						},
						success: function (e) {
							$("#carga_card").hide();
							
							if(e['rsl']>0){
								$("form#registrar_prodct_imp")[0].reset();
								Swal.fire({
									position: 'center',
									icon: 'success',
									title: 'Producto asignado exitosamente',
									showConfirmButton: false,
									timer: 1500
								});
								location.reload();
							}
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log(xhr.status);
							console.log(thrownError);
							console.log(ajaxOptions);
						}
				});		
	});

	$("#add_product_corte").click(function(e){
		e.preventDefault();

				//$("#id_orden_ext").val($("#id_orden_add").val());

				var action 	 = $("form#registrar_prodct_corte").attr("action");
				var formData = $("form#registrar_prodct_corte").serialize();
				console.log(formData);
				$.ajax({
						url: action,
						type: "POST",
						data: formData,
						beforeSend:function(response){ 
							
							$("#carga_card").show();
						},
						success: function (e) {
							$("#carga_card").hide();
						
							
							if(e['rsl']>0){
								$("form#registrar_prodct_corte")[0].reset();
								Swal.fire({
									position: 'center',
									icon: 'success',
									title: 'Producto asignado exitosamente',
									showConfirmButton: false,
									timer: 1500
								});
								location.reload();
							}
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log(xhr.status);
							console.log(thrownError);
							console.log(ajaxOptions);
						}
				});		
	});
	
	//
	$("#btn_idcliente_prodct").click(function(e){
				e.preventDefault();
				var action = $("form#idprodct_cliente").attr("action");
				var formData = $("form#idprodct_cliente").serialize();
				$.ajax({
					url: action,
					type: "POST",
					data: formData,
					beforeSend:function(response){ 
						$("#carga_card").show();
						//$("#btn_idcliente_prodct").attr('disabled','disabled');
					},
					success: function (e) {
						//$("#btn_idcliente_prodct").removeAttr('disabled');
						//console.log(e);
						$("#card_body_prodct").html(e);
						$("#carga_card").hide();
						$("#submit-orden").show();
						//console.log(e['rsl']);
						//$("form#idprodct_cliente")[0].reset();
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
				});
	});
	
});

/*
jQuery(document).on('click', '#add_client', function(e){
	var formData = jQuery("form#form_cliente").serialize();
	jQuery.ajax({
		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
		url: 'add',
		type: "POST",
		data: formData,
		success: function (res) {
		},
	});
});*/
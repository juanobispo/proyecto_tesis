<script type="text/javascript">	
	$(document).ready(function(){
		$("#cliente_search").autocomplete({
	        source: function(request, response){
	        	$.ajax({
	        		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
					url:'{{route("search.clientes")}}',
					type: "post",
					dataType: 'json',
					data:{
						term:request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
                            return {
                                label	: item.label+" / "+item.cod,
                                value	: item.label,
                                id 		: item.id
                            }
                        }));
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
	        	});	
	        },
			select: function(e, selected) {
				//console.log(selected);
				$('#idCliente_asociar').val(selected.item.id);
			}
	    });

	    $("#product_search").autocomplete({
	        source: function(request, response ){
	        	//{{ URL::to("clientes/buscar")}}
	        	$.ajax({
	        		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
					url:'{{route("search.productos")}}',
					type: "post",
					dataType: 'json',
					data:{
						term:request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
                            return {
                                label	: item.label+" / "+item.cod,
                                value	: item.label,
                                id 		: item.id
                            }
                        }));
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
	        	});	
	        },
	        select: function(e, selected) {
				//console.log(selected);
				$('#idproduct_asociar').val(selected.item.id);
			}
	    });

	    $("#id_cliente_prodct_search").autocomplete({
	        source: function(request, response){
	        	$.ajax({
	        		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
					url:'{{route("search.clientes")}}',
					type: "post",
					dataType: 'json',
					data:{
						term:request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
                            return {
                                label	: item.label+" / "+item.cod,
                                value	: item.label,
                                id 		: item.id
                            }
                        }));
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
	        	});	
	        },
			select: function(e, selected) {
				//console.log(selected);
				$('#idCliente_prodct').val(selected.item.id);
			}
	    });

	    $(".orden_search").autocomplete({
	        source: function(request, response ){
	        	//{{ URL::to("clientes/buscar")}}
	        	$.ajax({
	        		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
					url:'{{route("search.ordenes")}}',
					type: "post",
					dataType: 'json',
					data:{
						term:request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
                            return {
                                label	: item.label,
                                value	: item.label,
                                id 		: item.id
                            }
                        }));
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
	        	});	
	        },
	        select: function(e, selected) {
				console.log(selected);
				$('.id_orden_add').val(selected.item.id);
			}
	    });

	    $(".empleado_search").autocomplete({
	        source: function(request, response ){
	        	//{{ URL::to("clientes/buscar")}}
	        	$.ajax({
	        		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
					url:'{{route("search.empleado")}}',
					type: "post",
					dataType: 'json',
					data:{
						term:request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
                            return {
                                label	: item.label,
                                value	: item.label,
                                id 		: item.id
                            }
                        }));
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
	        	});	
	        },
	        select: function(e, selected) {
				console.log(selected);
				$('.id_empleado_search').val(selected.item.id);
			}
	    });

	    $(".empleado_search_imp").autocomplete({
	        source: function(request, response ){
	        	//{{ URL::to("clientes/buscar")}}
	        	$.ajax({
	        		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
					url:'{{route("search.empleado_imp")}}',
					type: "post",
					dataType: 'json',
					data:{
						term:request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
                            return {
                                label	: item.label,
                                value	: item.label,
                                id 		: item.id
                            }
                        }));
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
	        	});	
	        },
	        select: function(e, selected) {
				console.log(selected);
				$('.id_empleado_search_imp').val(selected.item.id);
			}
	    });

	    $(".empleado_search_corte").autocomplete({
	        source: function(request, response ){
	        	//{{ URL::to("clientes/buscar")}}
	        	$.ajax({
	        		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
					url:'{{route("search.empleado_corte")}}',
					type: "post",
					dataType: 'json',
					data:{
						term:request.term
					},
					success: function (data) {
						response($.map(data, function (item) {
                            return {
                                label	: item.label,
                                value	: item.label,
                                id 		: item.id
                            }
                        }));
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
	        	});	
	        },
	        select: function(e, selected) {
				console.log(selected);
				$('.id_empleado_search_corte').val(selected.item.id);
			}
	    });

	    $("#add_bovina_ext").click(function(e){
				e.preventDefault();
				var id_orden = $("#id_orden_add").val(); 
				console.log(id_orden);

				$.ajax({
	        		headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')},
					url:'{{route("ext.bovina")}}',
					type: "post",
					data:{
						id_orden:id_orden,
					},
					success: function (data) {

						$("#zona_word").html(data);
						//console.log(data);
						/*response($.map(data, function (item) {
                            return {
                                label	: item.label,
                                value	: item.label,
                                id 		: item.id
                            }
                        }));*/
					},
					error: function (xhr, ajaxOptions, thrownError) {
						console.log(xhr.status);
						console.log(thrownError);
						console.log(ajaxOptions);
					}
	        	});		
		});
    });
</script>


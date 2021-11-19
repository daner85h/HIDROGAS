package com.hidrogas.app.controller;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.annotation.Validated;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import com.hidrogas.app.interfaceService.IClienteService;
import com.hidrogas.app.model.ClienteModel;

@Controller
@RequestMapping 
public class ClienteController {

	@Autowired
	private IClienteService service;
	
	@GetMapping("/consultarcliente")
	public String consultarCliente(Model model) {
		List<ClienteModel> clientes = service.consultarCliente();
		model.addAttribute("clientes", clientes);
		return "consultacliente";
	}
	
	@GetMapping("/newcliente")
	public String crearCliente(Model model) {
		model.addAttribute("cliente",new ClienteModel());
		return "formcliente";
	}
	
	@PostMapping("/guardarcliente")
	public String guardarCliente(@Validated ClienteModel c, Model model) {
		service.guardar(c);
		return "redirect:/consultarcliente";
	}
	
	@GetMapping("/editarcliente/{id}")
	public String editar(@PathVariable Integer id ,Model model) {
		Optional<ClienteModel> cliente = service.consultarClienteId(id);
		model.addAttribute("cliente",cliente);
		return "formcliente";
	}
	
	@GetMapping("/eliminarcliente/{id}")
	public String delete(Model model,@PathVariable Integer id) {
		service.eliminar(id);
		return "redirect:/consultarcliente";
	}
	
	@GetMapping("/iniciocliente")
	public String atras() {
		return "index";
	}
}

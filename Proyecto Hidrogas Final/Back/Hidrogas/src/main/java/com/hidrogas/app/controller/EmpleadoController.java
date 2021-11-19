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

import com.hidrogas.app.interfaceService.IEmpleadoService;
import com.hidrogas.app.model.EmpleadoModel;

@Controller
@RequestMapping 
public class EmpleadoController {
	
	@Autowired
	private IEmpleadoService service;
	
	@GetMapping("/consultarempleado")
	public String consultarEmpleado(Model model) {
		List<EmpleadoModel> empleados = service.consultarEmpleado();
		model.addAttribute("empleados", empleados);
		return "consultaempleado";
	}
	
	@GetMapping("/newempleado")
	public String crearEmpleado(Model model) {
		model.addAttribute("empleado",new EmpleadoModel());
		return "formempleado";
	}
	
	@PostMapping("/guardarempleado")
	public String guardarEmpleado(@Validated EmpleadoModel c, Model model) {
		service.guardar(c);
		return "redirect:/consultarempleado";
	}
	
	@GetMapping("/editarempleado/{id}")
	public String editar(@PathVariable Integer id ,Model model) {
		Optional<EmpleadoModel> empleado = service.consultarEmpleadoId(id);
		model.addAttribute("empleado",empleado);
		return "formempleado";
	}
	
	@GetMapping("/eliminarempleado/{id}")
	public String delete(Model model,@PathVariable Integer id) {
		service.eliminar(id);
		return "redirect:/consultarempleado";
	}
	
	@GetMapping("/inicioempleado")
	public String atras() {
		return "index";
	}

}

package com.hidrogas.app.service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.hidrogas.app.interfaceService.IEmpleadoService;
import com.hidrogas.app.interfaces.IEmpleado;
import com.hidrogas.app.model.EmpleadoModel;

@Service
public class EmpleadoService implements IEmpleadoService {
	
	@Autowired
	private IEmpleado data;

	@Override
	public List<EmpleadoModel> consultarEmpleado() {
		return (List<EmpleadoModel>) data.findAll();
	}

	@Override
	public Optional<EmpleadoModel> consultarEmpleadoId(Integer id) {

		return data.findById(id);
	}

	@Override
	public int guardar(EmpleadoModel c) {
		int res = 0;
		EmpleadoModel empleado= data.save(c);
		if (!empleado.equals(null)) {
			res = 1;
		}
		return res;
	}

	@Override
	public void eliminar(Integer id) {
		data.deleteById(id);

	}
}

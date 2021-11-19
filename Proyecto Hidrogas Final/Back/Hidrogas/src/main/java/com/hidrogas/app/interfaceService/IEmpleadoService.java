package com.hidrogas.app.interfaceService;

import java.util.List;
import java.util.Optional;

import com.hidrogas.app.model.EmpleadoModel;

public interface IEmpleadoService {
	
	public List<EmpleadoModel> consultarEmpleado();
	public Optional<EmpleadoModel> consultarEmpleadoId(Integer id);
	public int guardar(EmpleadoModel c);
	public void eliminar(Integer id);
}

package com.hidrogas.app.interfaceService;

import java.util.List;
import java.util.Optional;

import com.hidrogas.app.model.ClienteModel;

public interface IClienteService {

	public List<ClienteModel> consultarCliente();
	public Optional<ClienteModel> consultarClienteId(Integer id);
	public int guardar(ClienteModel c);
	public void eliminar(Integer id);
	
}

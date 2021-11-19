package com.hidrogas.app.service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.hidrogas.app.interfaceService.IClienteService;
import com.hidrogas.app.interfaces.ICliente;
import com.hidrogas.app.model.ClienteModel;

@Service
public class ClienteService implements IClienteService{

	@Autowired
	private ICliente data;
	
	@Override
	public List<ClienteModel> consultarCliente() {
		return (List<ClienteModel>)data.findAll();
	}

	@Override
	public Optional<ClienteModel> consultarClienteId(Integer id) {
		
		return data.findById(id);
	}

	@Override
	public int guardar(ClienteModel c) {
		int res=0;
		ClienteModel cliente = data.save(c);
		if(!cliente.equals(null)) {
			res=1;
		}
		return res;
	}

	@Override
	public void eliminar(Integer id) {
		data.deleteById(id);
		
	}

	
}

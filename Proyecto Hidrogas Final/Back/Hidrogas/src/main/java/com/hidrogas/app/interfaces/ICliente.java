package com.hidrogas.app.interfaces;

import org.springframework.data.repository.CrudRepository;

import com.hidrogas.app.model.ClienteModel;

public interface ICliente extends CrudRepository<ClienteModel, Integer>{

}

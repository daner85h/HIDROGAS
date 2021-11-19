package com.hidrogas.app.interfaces;

import org.springframework.data.repository.CrudRepository;

import com.hidrogas.app.model.EmpleadoModel;

public interface IEmpleado extends CrudRepository<EmpleadoModel, Integer> {

}

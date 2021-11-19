package com.hidrogas.app.model;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "orden_servicio")
public class OrdenServicioModel {
	
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Integer id;
	                                                                                 
	private Integer idOrdenServicio;
	private Integer idCliente;
	private Integer idCategoria;
	private String fecha;
	private String valorContrato;
	private String descripcion;
	private String tiempoProcesos;
	private String imagenes;
	private String zona;
	private String direccion;
	
	public OrdenServicioModel() {
		
	}

	public OrdenServicioModel(Integer id, Integer idOrdenServicio, Integer idCliente, Integer idCategoria, String fecha,String valorContrato, String descripcion, String tiempoProcesos,
			String imagenes, String zona,String direccion) {
	
		this.id = id;
		this.idOrdenServicio = idOrdenServicio;
		this.idCliente = idCliente;
		this.idCategoria = idCategoria;
		this.fecha = fecha;
		this.valorContrato = valorContrato;
		this.descripcion = descripcion;
		this.tiempoProcesos = tiempoProcesos;
		this.imagenes = imagenes;
		this.zona = zona;
		this.direccion = direccion;
	}

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public Integer getIdOrdenServicio() {
		return idOrdenServicio;
	}

	public void setIdOrdenServicio(Integer idOrdenServicio) {
		this.idOrdenServicio = idOrdenServicio;
	}

	public Integer getIdCliente() {
		return idCliente;
	}

	public void setIdCliente(Integer idCliente) {
		this.idCliente = idCliente;
	}

	public Integer getIdCategoria() {
		return idCategoria;
	}

	public void setIdCategoria(Integer idCategoria) {
		this.idCategoria = idCategoria;
	}

	public String getFecha() {
		return fecha;
	}

	public void setFecha(String fecha) {
		this.fecha = fecha;
	}

	public String getValorContrato() {
		return valorContrato;
	}

	public void setValorContrato(String valorContrato) {
		this.valorContrato = valorContrato;
	}

	public String getDescripcion() {
		return descripcion;
	}

	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}

	public String getTiempoProcesos() {
		return tiempoProcesos;
	}

	public void setTiempoProcesos(String tiempoProcesos) {
		this.tiempoProcesos = tiempoProcesos;
	}

	public String getImagenes() {
		return imagenes;
	}

	public void setImagenes(String imagenes) {
		this.imagenes = imagenes;
	}

	public String getZona() {
		return zona;
	}

	public void setZona(String zona) {
		this.zona = zona;
	}

	public String getDireccion() {
		return direccion;
	}

	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}
	
	
}

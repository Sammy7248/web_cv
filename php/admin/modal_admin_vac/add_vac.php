<div class="modal fade" id="modal_add_vac" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg bg-primary">
                <button type="button" class="close" data-dismiss="modal" style="color: while;">&times;</button>
                <h4 class="modal-tittle header-modal">Agregar Vacante</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col col-md-12">
                        <div class="col col-md-12">
                            <h5>Informaci&oacute;n Del Puesto</h5>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="col col-md-12">
                            <select class="selectpicker form-control" name="Area" id="area">
                                <option selected value="">Seleccione Area</option>
                                <option value="RH">Recursos Humanos</option>
                                <option value="DE">Desarrollo</option>
                                <option value="IF">Infraestructura</option>
                                <option value="SO">Soporte</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col col-md-12">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Puesto" name="puesto" id="puesto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="col col-md-6">
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Edad Minima" name="edad_min" id="edad_min">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="input-group">
                                <input type="number" placeholder="Edad Maxima" class="form-control" name="edad_max" id="edad_max">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="col col-md-12">
                            <select class="selectpicker form-control" name="Sexo" id="sexo">
                                <option value="">Seleccione Sexo</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                                <option value="I">Indistinto</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="col col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Experiencia Requerida" name="exp_req" id="exp_req">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="col col-md-12">
                            <h5>Documentos Requeridos</h5>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="col col-md-6">
                            <div class="form-control">
                                <label for="check_exp">CURP</label>
                                <input type="checkbox" name="check_exp" id="echek_exp">
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-control">
                                <label for="check_acta">Acta Nacimiento</label>
                                <input type="checkbox" name="check_acta" id="check_acta">
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="col col-md-6">
                            <div class="form-control">
                                <label for="check_cert">Certificado</label>
                                <input type="checkbox" name="check_cert" id="check_cert">
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-control">
                                <label for="check_comp">Comprobante Domicilio</label>
                                <input type="checkbox" name="check_comp" id="check_comp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <i class="glyphicon glyphicon-floppy-remove"></i>&nbsp;Cancelar
                </button>
                <button type="button" class="btn btn-success" data-dismiss="modal">
                    <i class="glyphicon glyphicon-floppy-disk"></i>&nbsp;Agregar
                </button>
            </div>
        </div>
    </div>
</div>
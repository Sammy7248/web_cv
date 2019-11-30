<div class="modal fade" id="edit_vac" tabindex="-1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg bg-primary">
                <button type="button" class="close" data-dismiss="true">&times;</button>
                <h4 class="modal-tittle header-modal">Editar Vacante</h4>
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
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Area" readonly placeholder="">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-close"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col col-md-12">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Puesto" readonly name="puesto" id="puesto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            </div>
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
                        <h5>Edad</h5>    
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
                            <h5>Sexo</h5>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="col col-md-4">
                            <label for="check_M" class="form-control">Masculino&nbsp;<input type="checkbox" name="check_M" id="check_M"></label>
                        </div>
                        <div class="col col-md-4">
                            <label for="check_M" class="form-control">Femenino&nbsp;<input type="checkbox" name="check_F" id="check_F"></label>
                        </div>
                        <div class="col col-md-4">
                        <label for="check_M" class="form-control">Indistinto&nbsp;<input type="checkbox" name="check_M" id="check_I"></label>
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
                    <div class="col col-md-12">
                        <div class="col col-md-12">
                            <h5>Estatus</h5>
                        </div>
                    </div>
                    <div class="col col-md-12">
                        <div class="col col-md-12">
                            <select class="selectpicker form-control" name="vac_disp" id="vac_disp">
                                <option selected value="D">Disponible</option>
                                <option value="O">Ocupado</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-floppy-remove"></i>&nbsp;Cancelar</button>
                <button class="btn btn-primary" type="button" data-dismiss="modal"><i class="glyphicon glyphicon-floppy-disk"></i>&nbsp;Actualizar</button>
            </div>
        </div>
    </div>
</div>
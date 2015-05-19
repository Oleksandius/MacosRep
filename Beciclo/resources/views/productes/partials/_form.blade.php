        

                        <div class="form-group">
                            <label class="col-md-4 control-label">Titol</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="titol">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Marca</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="marca" value="{{ old('marca') }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Fotografia</label>
                            <div class="col-md-6">
                                <input type="file" name="foto">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Model</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="model" value="{{ old('model') }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Preu</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="preu" value="{{ old('preu') }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Any</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="any" value="{{ old('any') }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Pes Aproximat</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pes_aprox" value="{{ old('pes_aprox') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Material</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="material" value="{{ old('material') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Color</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="color" value="{{ old('color') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Estat</label>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                Nou <input type="radio" name="estat" value="nuevo">
                                </div>
                                <div class="col-md-4">
                                Seminou <input type="radio" name="estat" value="seminuevo">
                                </div>
                                <div class="col-md-4">
                                Utilitzat <input type="radio" name="estat" value="usado">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Comentari descriptiu</label>
                            <div class="col-md-6">
                                <textarea name="comentari" class="form-control" value="{{old('comentari')}}"></textarea>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit($submit_text) !!}
                            </div>
                        </div>
                    

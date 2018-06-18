someter los proyectos, y que los sometidos solo se puedan ver...
//guardar en session el page del index
//sesion time out


            <div class="form-group col-md-12">
              <div class="form-group">
                <label for="descripcion">Seleccione de la lista o escriba lo que entregara:</label>
                <input class="form-control" id="descripcion" type="text" size="100" list="lstentregables" required>
                <datalist id="lstentregables">
                 @foreach($opciones as $opcion)
                   <option data-value="{{$opcion->tipo}}"> {{$opcion->descripcion}}</option>
                 @endforeach
                </datalist>
              </div>
              <div class="form-group">
                <label for="tipo">Seleccione el tipo de entregable:</label><br>
                 @foreach($tipos as $tipo)
                   <input type="radio" id="tipo_{{$tipo->tipo}}" name="tipo" value="{{$tipo->tipo}}">{{$tipo->tipo}}<br>
                 @endforeach
              </div>
              <div class="form-group">
                <label for="txtcuantos" size>Cuantos:</label>
                <input class="form-control" id="cuantos" type="number" step="1" min="1" max="3" value="0"  size="3" required>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary" id="btnadd">+</button>
              </div>



                                <div class="row">
                    <div class="col-12">monto</div>
                  </div>
                  <div class="row">
                    <div class="col-12">entregable</div>
                  </div>
                </div>

                En este período se harán entrevistas para definir los requisitos del sistema
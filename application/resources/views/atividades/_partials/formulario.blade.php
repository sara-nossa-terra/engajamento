@csrf
<input type="hidden" name="id" id="id" value="{{ $atividades->id ?? old('id') }}">

<div class="card-body">
    <div class="form-group row">
        <label for="tx_nome" class="col-sm-2 col-form-label">Nome
            <span class="obrigatorio"> *</span>
        </label>
        <div class="col-sm-10">
            <input type="text" class="form-control {{ $errors->has('tx_nome') ? 'is-invalid' : '' }}"
                   value="{{ $atividades->tx_nome ?? old('tx_nome') }}" id="tx_nome" placeholder="Nome"
                   name="tx_nome">
            @if ($errors->has('tx_nome'))
                <div class="invalid-feedback">
                    {{ $errors->first('tx_nome') }}
                </div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="dt_dia" class="col-sm-2 col-form-label">Dia
            <span class="obrigatorio"> *</span>
        </label>
        <div class="col-sm-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                {{-- Implementar callendar.--}}
                <input class="form-control date_input {{ $errors->has('dt_dia') ? 'is-invalid' : '' }}"
                        placeholder="06/06/2020"
                       type="text" name="dt_dia" id="dt_dia"
                       value="{{ $atividades->tx_dia ?? old('dt_dia') }}">
                @if ($errors->has('dt_dia'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dt_dia') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-info">
        <i class="fas fa-paper-plane"></i>
        Salvar
    </button>
    <a href="{{ route('atividades.index') }}" class="btn btn-warning">
        <i class="fas fa-arrow-left"></i>
        Voltar
    </a>
</div>

<script>
    window.addEventListener('load', function() {
        // datepicker
        flatpickr('#dt_dia', {
            altFormat: "j F Y",
            defaultDate: new Date(),
            locale: 'pt',
            altInput: true,
            enableTime: true,
            dateFormat: "Y-m-d H:i:S",
            time_24hr: true,
            onChange(dates, b, instance) {
                const [dataSelecionada] = [dates];

                instance.setDate(dataSelecionada);
            }
        });

    })
</script>

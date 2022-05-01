@extends('layouts.app')

@section('estilos')
    <link href="{{ url('css\homeStyle.css') }}"   rel="stylesheet">
    {{-- <link href="{{ url('css\selectStyle.css') }}" rel="stylesheet"> --}}
@endsection

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

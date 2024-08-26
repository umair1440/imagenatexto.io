@extends('frontend.main')
@section('content')
    <section class="container contacts" style="margin-top: 40px !important">
            <h1 class="md:text-5xl sm:text-4xl text-3xl mb-2 w-fit mx-auto">Contacto</h1>
        <div class="contact_msg">
            @error('msg')
                {{ Log::error("msg"); }}
            @enderror
            @if (!empty(@$message))
                <p>
                    {{ @$message }}
                </p>
            @endif
        </div>
        <form class="container contact_form p-5 default-border mt-5 max-w-[600px] w-[95%] m-auto mb-10" action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-3">
                <label for="" class="mb-3">Nombre</label>
                <input class="default-border-small" type="text" placeholder="Su Nombre" name="name">
            </div>
            <div class="flex flex-col mb-3">
                <label for="" class="mb-3">Email</label>
                <input class="default-border-small" type="text" placeholder="Su Email" name="email">
            </div>
            <div class="flex flex-col mb-3">
                <label for="" class="mb-3">Mensaje</label>
                <textarea class="default-border-small p-3" name="message" placeholder="Su Mensaje" id="" cols="30" rows="4"></textarea>
            </div>
            <div class="flex flex-col">
                <button class="primary-btn w-fit m-auto mt-5" type="submit">Enviar</button>
            </div>
            </div>
    </section>
@endsection

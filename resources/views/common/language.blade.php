<div class="position-absolute mr-4" style="top:0; right: 0;">
    @foreach (Config::get('app.available_locales') as $locale_name => $locale)
        <a class="text-dark" href="{{ route('language', ['locale' => $locale]) }}"> {{$locale}}</a>
    @endforeach
</div>
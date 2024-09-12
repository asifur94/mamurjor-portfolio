<a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
<header class="header">
    <div class="container">
        <ul class="social-icons pt-3">
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
            <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
        </ul>
        <div class="header-content">
            <h4 class="header-subtitle" >Hello, I am</h4>
            <h1 class="header-title">{{ $heroArea->heading ?? 'Default heading' }}</h1>
            <h6 class="header-mono" >{{ $heroArea->subheading ?? 'Default Subheading' }}</h6>
            @if ($heroArea->file)
            <a href="{{ asset('storage/files/' . $heroArea->file) }}" class="btn btn-outline-primary mt-3">
                @if ($heroArea->button_text)
                <button class="btn btn-outline-danger">
                    <i class="icon-down-circled2"></i>
                    {{ $heroArea->button_text }}
                </button>
                @endif</a>
            @endif
        </div>
    </div>
</header>

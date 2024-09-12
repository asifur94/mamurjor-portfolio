<!-- Breadcrumb -->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    {{-- <div class="breadcrumb-title pe-3">{{ $breadcrumbs[0]['name'] }}</div> --}}
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                @foreach($breadcrumbs as $breadcrumb)
                    @if (!$loop->last)
                        <li class="breadcrumb-item">
                            <a href="{{ $breadcrumb['url'] }}">
                                {{ $breadcrumb['name'] }}
                            </a>
                        </li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $breadcrumb['name'] }}
                        </li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb -->

{{-- <section class="section bg-custom-gray" id="price">
    <div class="container">
        <h1 class="mb-5"><span class="text-danger">packs</span> pricing</h1>
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4">
                    <h3 class="price-card-title">free</h3>
                    <div class="price-card-cost">
                        <sup class="ti-money"></sup>
                        <span class="num">0</span>
                        <span class="date">mo</span>
                    </div>
                    <ul class="list">
                        <li class="list-item">5 <span class="text-muted">project</span></li>
                        <li class="list-item">1gb <span class="text-muted">storage</span></li>
                        <li class="list-item"><span class="text-muted">no domain</span></li>
                        <li class="list-item">1 <span class="text-muted">user</span></li>
                    </ul>
                    <button class="btn btn-primary btn-rounded w-lg">subscribe</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4">
                    <h3 class="price-card-title">basic</h3>
                    <div class="price-card-cost">
                        <sup class="ti-money"></sup>
                        <span class="num">10</span>
                        <span class="date">mo</span>
                    </div>
                    <ul class="list">
                        <li class="list-item">50 <span class="text-muted">project</span></li>
                        <li class="list-item">10gb <span class="text-muted">storage</span></li>
                        <li class="list-item">1<span class="text-muted">domain</span></li>
                        <li class="list-item">5 <span class="text-muted">user</span></li>
                    </ul>
                    <button class="btn btn-primary btn-rounded w-lg">subscribe</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center price-card-requried mb-4">
                    <h3 class="price-card-title">exclusive</h3>
                    <div class="price-card-cost">
                        <sup class="ti-money"></sup>
                        <span class="num">25</span>
                        <span class="date">mo</span>
                    </div>
                    <ul class="list">
                        <li class="list-item">150 <span class="text-muted">Project</span></li>
                        <li class="list-item">15GB <span class="text-muted">Storage</span></li>
                        <li class="list-item">5<span class="text-muted"> Domain</span></li>
                        <li class="list-item">15<span class="text-muted">User</span></li>
                    </ul>
                    <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4">
                    <h3 class="price-card-title">Pro</h3>
                    <div class="price-card-cost">
                        <sup class="ti-money"></sup>
                        <span class="num">99</span>
                        <span class="date">MO</span>
                    </div>
                    <ul class="list">
                        <li class="list-item">500 <span class="text-muted">Project</span></li>
                        <li class="list-item">1000GB <span class="text-muted">Storage</span></li>
                        <li class="list-item">10<span class="text-muted"> Domain</span></li>
                        <li class="list-item">Unlimite<span class="text-muted">User</span></li>
                    </ul>
                    <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="section bg-custom-gray" id="price">
    <div class="container">
        <h1 class="mb-5"><span class="text-danger">Packages</span> Pricing</h1>
        <div class="row align-items-center">
            @foreach ($packages as $package)
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4">
                    <h3 class="price-card-title">{{ $package->name }}</h3>
                    <div class="price-card-cost">
                        <sup class="ti-money"></sup>
                        <span class="num">{{ $package->price }}</span>
                        <span class="date">mo</span>
                    </div>
                    <ul class="list">
                        <li class="list-item">{{ $package->projects }} <span class="text-muted">project(s)</span></li>
                        <li class="list-item">{{ $package->storage }} <span class="text-muted">storage</span></li>
                        <li class="list-item">{{ $package->domains }} <span class="text-muted">domain(s)</span></li>
                        <li class="list-item">{{ $package->users }} <span class="text-muted">user(s)</span></li>
                    </ul>
                    <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

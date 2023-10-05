<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="btn btn-secondary btn-sm mb-4" href="{{ url('/') }}">
                    <div class="sb-sidenav-menu-heading text-white">SGC</div>
                </a>
                        
                <a class="nav-link" href="{{ route('clients-index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Clientes
                </a>

                <a class="nav-link" href="{{ route('collectors-index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Cobradores
                </a>

                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Cobranças
                </a>
                            
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Relatórios
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">Clientes</a>
                        <a class="nav-link" href="">Cobradores</a>
                        <a class="nav-link" href="">Cobranças</a>
                    </nav>
                </div>
                            
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                               
            </div>
                           
        </div>
                    
    </nav>
</div>
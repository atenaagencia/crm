
        <li class="nav-header">
            Admin
        </li>
        <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Cadastro de Usuários
                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Tabelas
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview nav-admin">
                <li class="nav-item">
                    <a href="{{route('niche.index')}}" class="nav-link">
                        <p>Nichos</p>
                    </a>
                </li>
            </ul>

        </li>

<footer>
    <a href="{{ route('index') }}">
        <img class="footer-item {{ (request()->is('articles')) ? 'nav' : '' }}" src="https://svgshare.com/i/KyJ.svg"></a>
    <a href="{{ route('create') }}">
        <img class="footer-item {{ (request()->is('articles/create')) ? 'nav' : '' }}" src="https://svgshare.com/i/Kx7.svg"></a>
    <a href="{{ route('stock') }}">
        <img class="footer-item {{ (request()->is('stock')) ? 'nav' : '' }}" src="https://svgshare.com/i/Kxm.svg"></a>
    <a href="{{ route('search') }}">
        <img class="footer-item {{ (request()->is('search')) ? 'nav' : '' }}" src="https://svgshare.com/i/Ky7.svg"></a>
    <a href="{{ route('settings') }}">
        <img class="footer-item {{ (request()->is('settings')) ? 'nav' : '' }}" src="https://svgshare.com/i/Kwb.svg"></a>
</footer>
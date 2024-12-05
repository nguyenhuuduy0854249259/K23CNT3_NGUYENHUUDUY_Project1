<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <div>
        <h1> This is Header Component </h1>
        <h3> Welcome to, {{ $name }} </h3>
        <h3> Fruits are: </h3>
        <ul>
            @foreach ($fruits as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
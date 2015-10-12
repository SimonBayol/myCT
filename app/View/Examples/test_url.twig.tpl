<h1>Test url & parameters </h1>
<p>
    <ul>
        <li>Parameter 1 : {{ param1 }}</li>
        {% for param in params %}
            <li>params {{ loop.index }} : {{ param.text }} {{ date.format(param.date) }}</li>
        {% endfor %}
    </ul>
</p>
<h1>Coucou <strong>{{ data.User.identity }}</strong></h1>
<h2>{{ sub_title }}</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Size</th>
        <th>Address</th>
    </tr>
    <tr>
        <td>{{ data.User.identity }}</td>
        <td>{{ data.User.age ~ ' ans' }}</td>
        <td>{{ data.User.Description.size ~ data.User.Description.size_unity }}</td>
        <td>{{ data.User.Address.street }}<br>{{ data.User.Address.zip }}<br>{{ data.User.Address.city }}</td>
    </tr>
</table>
<h2>Test lien</h2>
<p>Suivez ce lien: {{ html.link('test url', {'action':'test_url', 0:'coucou'}) }}</p>
<h2>Test incude html</h2>
<div>{{ _html }}</div>
<h2>Test Element</h2>
<div>{% element 'test_element.twig' %}</div>
{% extends "master.volt" %}
{% block content %}
    <h1>Congratulations!</h1>

    <p>{{ message }}</p>

    <p>You're using limingxinleo\phalcon-project {{ version }}</p>

    <p><img src="{{ static_url('static/images/logo.png') }}" alt=""></p>
{% endblock %}

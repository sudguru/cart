<div class="row justify-content-center">
    <div class="col-6">
        {% if flash.getMessage('info') %}
        <div class="alert alert-info">
            {{ flash.getMessage('info') | first }}
        </div>
        {% endif %}

        {% if flash.getMessage('error') %}
        <div class="alert alert-danger">
            {{ flash.getMessage('error') | first }}
        </div>
        {% endif %}

        {% if flash.getMessage('success') %}
        <div class="alert alert-success">
            {{ flash.getMessage('success') | first }}
        </div>
        {% endif %}
    </div>
</div>
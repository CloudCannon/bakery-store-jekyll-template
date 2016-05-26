---
layout: default
title: Date Formatting
date: 2016-03-23T10:20:00Z
---

{{ page.date | date_to_long_string }}

{{ page.date | date_to_rfc822 }}

{{ page.date | date_to_string }}

{{ page.date | date_to_xmlschema }}

{{ page.date | date: "%m/%d/%Y" }}

{{ page.date | date: "%-d %B %Y"}}

{% assign day = page.date | date: "%-d"  %}
{% case day %}
  {% when '1' or '21' or '31' %}{{ day }}st
  {% when '2' or '22' %}{{ day }}nd
  {% when '3' or '23' %}{{ day }}rd
  {% else %}{{ day }}th
{% endcase %}
of {{ page.date | date: "%B" }}, {{ page.date | date: "%Y" }}

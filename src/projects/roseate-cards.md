---
layout: 'layouts/project'
name: Roseate Cards
image_slug: roseate
role: Designer and Frontend Developer
summary: Website design and build for an online greetings card retail company, with Etsy integration.
skills:
  html:
    id: html5
    text: HTML5
  css:
    id: css3
    text: CSS3
  sass:
    id: sass
    text: Sass
  typescript:
    id: typescript
    text: Typescript
  next:
    id: next
    text: Next.JS
  schema:
    id: schema
    text: Schema.org
  etsy:
    id: etsy
    text: Etsy API
tags:
  - projects
start_date: 2020-08-01
end_date: 2021-08-01
---

# Project: {{ name }}

<strong>{{ role }}</strong>

Website for an online greetings card company. Uses the Etsy API to fetch products to list - these are categorised automatically using Etsy tags. Users can click-through to Etsy to purchase items. Site has a GDPR-compliant cookie banner for accepting or rejecting Google Analytics cookies. Site developed alongside [Andy Smith](https://andyms.uk/)

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image project-image--multiple" src="/assets/project-images/roseate.png" alt="" role="presentation">
  <img class="project-image project-image--multiple" src="/assets/project-images/roseate2.png" alt="" role="presentation">
</div>

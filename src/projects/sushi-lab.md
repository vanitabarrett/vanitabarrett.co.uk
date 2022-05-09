---
layout: 'layouts/project'
name: Sushi Lab
image_slug: sushilab
role: Designer and Frontend Developer
summary: Website design for a new quick-service sushi restaurant based in Guildford.
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
  javascript:
    id: javascript
    text: JavaScript
  mustache:
    id: mustache
    text: mustache
  php:
    id: php
    text: PHP
  mysql:
    id: mysql
    text: MySQL
  requirejs:
    id: requirejs
    text: RequireJS
tags:
  - projects
start_date: 2016-01-01
end_date: 2017-02-01
---

# Project: {{ name }}

<strong>{{ role }}</strong>

Calvin required a website for the new sushi restaurant he was opening in Guildford town centre. He took a very laid-back approach, providing only the company logo and a request that the site be 'bold and exciting'. The site featured: animated SVG icons; custom CMS; social media and news feed, and custom styling of Google Maps.

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image project-image--multiple" src="/assets/project-images/sushilab.png" alt="" role="presentation">
  <img class="project-image project-image--multiple" src="/assets/project-images/sushilab2.png" alt="" role="presentation">
</div>

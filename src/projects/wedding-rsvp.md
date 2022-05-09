---
layout: 'layouts/project'
name: Wedding RSVP
image_slug: vawedding
role: Designer and Frontend Developer
summary: Design and build of a wedding website, primarily for guest RSVP.
skills:
  html:
    id: html5
    text: HTML5
  css:
    id: css3
    text: CSS3
  sass:
    id: sass
    text: Sass + BEM
  javascript:
    id: javascript
    text: JavaScript
  node:
    id: node
    text: Node.js
tags:
  - projects
start_date: 2019-01-01
end_date: 2021-08-01
---

# Project: {{ name }}

<strong>{{ role }}</strong>

Design and build of a wedding website, tying in with the colour scheme (navy, burgundy, neutrals and gold). The website will allow guests to view details of the wedding day; RSVP; choose food options; view the gift list; suggest music.

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image project-image--multiple" src="/assets/project-images/vawedding.png" alt="" role="presentation">
  <img class="project-image project-image--multiple" src="/assets/project-images/vawedding2.png" alt="" role="presentation">
</div>

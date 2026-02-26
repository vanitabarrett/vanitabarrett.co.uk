---
layout: 'layouts/project'
name: Baby Stops | Find Baby Change
image_slug: babystops
role: Founder and Software Engineer
summary:
skills:
  react:
    id: react
    text: React Native
  googlemaps:
    id: googlemaps
    text: Google Maps Places API
  typescript:
    id: typescript
    text: Typescript
  postgresql:
    id: postgresql
    text: PostgreSQL
  expo:
    id: expo
    text: Expo
tags:
  - projects
  - ongoing_projects
start_date: 2025-10-26
---

# Project: {{ name }}

<strong>{{ role }}</strong>

As a new mum, I realised that parenting is lots of quiet cuddles and sweet moments, but it’s also a lot of "survival mode" logistics. I created Baby Stops to help map out accessible baby changing facilities, to give parents one less thing to worry about. You can use Baby Stops to find baby change facilities nearby, check details of facilities, e.g do they have an adult toilet, do they fit a pram, and add your own facilities that you come across - the whole app is community-driven.

<a href="https://play.google.com/store/apps/details?id=com.babystops.babystops">Download on Android now</a>
</br>
<a href="https://www.babystops.co.uk/">babystops.co.uk</a>

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image project-image--multiple" src="/assets/project-images/babystops.png" alt="" role="presentation">
  <img class="project-image project-image--multiple" src="/assets/project-images/babystops2.png" alt="" role="presentation">
</div>

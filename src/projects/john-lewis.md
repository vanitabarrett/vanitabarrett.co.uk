---
layout: 'layouts/project'
name: John Lewis Partnership
image_slug: johnlewis
role: Senior Frontend Developer
summary:
skills:
  html:
    id: html5
    text: HTML5
  sass:
    id: sass
    text: Sass + BEM
  react:
    id: react
    text: React
  redux:
    id: redux
    text: Redux
  reactTestingLibrary:
    id: reactTestingLibrary
    text: React Testing Library
tags:
  - projects
  - ongoing_projects
start_date: 2022-10-10
---

# Project: {{ name }}

<strong>{{ role }}</strong>

Working on the checkout portion of the John Lewis website, responsible for allowing customers to choose their delivery (or collection) method, enter payment details and submit their order. Day-to-day tasks include investigating bugs reported to us; researching and investigating accessibility issues and solutions; and making necessary changes to the John Lewis design system. Most recently, I have been advising and leading the teams approach to moving from Enzyme to React Testing Library, which will eventually allow us to upgrade our version of React.

<a href="https://www.johnlewis.com/">johnlewis.com</a>

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image project-image--multiple" src="/assets/project-images/johnlewis.png" alt="" role="presentation">
  <img class="project-image project-image--multiple" src="/assets/project-images/johnlewis2.png" alt="" role="presentation">
</div>

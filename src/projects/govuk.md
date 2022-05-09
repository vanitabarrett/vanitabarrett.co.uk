---
layout: 'layouts/project'
name: GOV.UK
image_slug: govuk
role: Frontend Developer
summary: Building new templates, enhancing accessibility, and working with other frontend developers to consolistart_date and improve the frontend architecture across the UK government website.
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
  jasmine:
    id: jasmine
    text: Jasmine
  rails:
    id: rails
    text: Ruby on Rails
  rspec:
    id: rspec
    text: RSpec
  mustache:
    id: mustache
    text: Mustache
tags:
  - projects
start_date: 2018-06-01
end_date: 2020-07-06
---

# Project: {{ name }}

<strong>{{ role }}</strong>

Primarily, my role as a frontend developer on GOV.UK involved building new templates and components, taking outcomes from user research and accessibility audits and turning them into actionable developer stories, enhancing the accessibility of GOV.UK and working with other frontend developers to consolistart_date and improving the frontend architecture across GOV.UK

In my time on GOV.UK I worked on multiple teams focusing on different areas of the site, including:

- ensuring GOV.UK meets the international WCAG 2.1 AA accessibility standard
- leading teams developing a business-focused tool for EU Exit and improving email notifications
- heavily involved in the build and iteration of Brexit/Transition and Coronavirus campaign pages
- leading development of gov.uk/ask (now offline) during the COVID-19 crisis
- a new site-wide cookie consent mechanism

<a href="https://www.gov.uk/">gov.uk</a>

<ul class="project__skill-list" aria-label="Uses the following technologies">
  {% for skill in skills %}
  <li class="project__skill-item">
    <img class="project__skill-icon" src="/assets/skill-icons/{{ skill[1].id }}.svg" alt="" role="presentation">
    <p class="project__skill-text">{{ skill[1].text }}</p>
  </li>
  {% endfor %}
</ul>

<div class="project-images">
  <img class="project-image project-image--multiple" src="/assets/project-images/govuk.png" alt="" role="presentation">
  <img class="project-image project-image--multiple" src="/assets/project-images/govuk2.png" alt="" role="presentation">
</div>

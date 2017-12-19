import { NgModule }              from '@angular/core';
import { RouterModule, Routes }  from '@angular/router';

import { AboutPageComponent }     from './about-page/about-page.component';
import { ContactPageComponent }   from './contact-page/contact-page.component';
import { PortfolioPageComponent } from './portfolio-page/portfolio-page.component';
import { ResumePageComponent}     from './resume-page/resume-page.component';

const appRoutes: Routes = [
  { path: '', redirectTo: '/about', pathMatch: 'full' },
  { path: 'about', component: AboutPageComponent },
  { path: 'contact', component: ContactPageComponent },
  { path: 'portfolio', component: PortfolioPageComponent },
  { path: 'resume', component: ResumePageComponent }
];

@NgModule({
  imports: [
    RouterModule.forRoot(
      appRoutes,
      { enableTracing: false } // <-- debugging purposes only
    )
  ],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule {}

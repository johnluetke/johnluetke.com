import { NgModule }              from '@angular/core';
import { RouterModule, Routes }  from '@angular/router';

import { AboutComponent }     from './about/about.component';
import { ContactComponent }   from './contact/contact.component';
import { PortfolioComponent } from './portfolio/portfolio.component';
import { ResumeComponent}     from './resume/resume.component';

const appRoutes: Routes = [
  { path: 'about', component: AboutComponent },
  { path: 'contact', component: ContactComponent },
  { path: 'portfolio', component: PortfolioComponent },
  { path: 'resume', component: ResumeComponent }
];

@NgModule({
  imports: [
    RouterModule.forRoot(
      appRoutes,
      { enableTracing: true } // <-- debugging purposes only
    )
  ],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule {}

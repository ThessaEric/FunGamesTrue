import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { AddgameComponent } from './addgame/addgame.component';
import { HubComponent } from './hub/hub.component';
import { GaleryComponent } from './galery/galery.component';
import { BasketComponent } from './basket/basket.component';
import { FidelityComponent } from './fidelity/fidelity.component';

const routes: Routes = [
  {path:'addgame',component:AddgameComponent},
  {path:'fidelity',component:FidelityComponent},
  {path:'hub',component:HubComponent},
  {path:'basket',component:BasketComponent},
  {path:'',redirectTo:'/hub',pathMatch:'full'}
];

@NgModule({
  declarations: [
    AppComponent,
    AddgameComponent,
    HubComponent,
    GaleryComponent,
    BasketComponent,
    FidelityComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes)
  ],
  exports:[RouterModule],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

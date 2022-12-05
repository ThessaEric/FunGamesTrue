export interface Product {
    id: number;
    name: string;
    price: number;
    description: string;
    img:string;
  }
  
  export const products = [
    {
      id: 1,
      name: 'Monopoly',
      price: 799,
      description: 'A large phone with one of the best screens',
      img: 'https://images.pexels.com/photos/14397947/pexels-photo-14397947.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load'
    },
    {
      id: 2,
      name: 'Les petits chevaux',
      price: 699,
      description: 'A great phone with one of the best cameras',
      img: 'https://images.pexels.com/photos/4004174/pexels-photo-4004174.jpeg?auto=compress&cs=tinysrgb&w=600'
    },
    {
      id: 3,
      name: 'Cluedo',
      price: 299,
      description: '',
      img: 'https://images.pexels.com/photos/4009628/pexels-photo-4009628.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'
    }
  ];
  
  
  /*
  Copyright Google LLC. All Rights Reserved.
  Use of this source code is governed by an MIT-style license that
  can be found in the LICENSE file at https://angular.io/license
  */
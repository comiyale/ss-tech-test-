import { mount } from '@vue/test-utils'
import App from './../../src/App.vue'

describe('App', () => {
    it('has getFact Method', () => {
      expect(typeof App.methods.getFact).toBe('function')
    })

    it('has factText Compute', () => {
      expect(typeof App.computed.factText).toBe('function')
    })
  })
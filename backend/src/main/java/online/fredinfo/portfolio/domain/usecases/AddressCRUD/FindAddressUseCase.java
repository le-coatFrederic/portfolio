package online.fredinfo.portfolio.domain.usecases.AddressCRUD;

import online.fredinfo.portfolio.domain.entities.Address;
import online.fredinfo.portfolio.domain.entities.AddressRepository;

import java.util.List;
import java.util.UUID;

public class FindAddressUseCase {
    private final AddressRepository addressRepository;

    public FindAddressUseCase(AddressRepository addressRepository) {
        this.addressRepository = addressRepository;
    }

    public Address execute(UUID id) {
        return this.addressRepository.findById(id);
    }

    public List<Address> execute() {
        return this.addressRepository.findAll();
    }

    public List<Address> executeFindByCity(String city) {
        return this.addressRepository.findByCity(city);
    }

    public List<Address> executeFindByCountry(String country) {
        return this.addressRepository.findByCountry(country);
    }

    public List<Address> executeFindByState(String state) {
        return this.addressRepository.findByState(state);
    }

    public List<Address> executeFindAllOrderByCountry() {
        return this.addressRepository.findAllOrderByCountry();
    }

    public List<Address> executeFindAllOrderByCity() {
        return this.addressRepository.findAllOrderByCity();
    }

    public List<Address> executeFindAllOrderByState() {
        return this.addressRepository.findAllOrderByState();
    }
}

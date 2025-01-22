package online.fredinfo.portfolio.domain.usecases.IdentityCRUD;

import online.fredinfo.portfolio.domain.entities.Identity;
import online.fredinfo.portfolio.domain.entities.IdentityRepository;

import java.util.List;
import java.util.UUID;

public class FindIdentityUseCase {
    private final IdentityRepository identityRepository;

    public FindIdentityUseCase(IdentityRepository identityRepository) {
        this.identityRepository = identityRepository;
    }

    public IdentityRepository getIdentityRepository() {
        return identityRepository;
    }

    public Identity execute(UUID id) {
        return this.identityRepository.findById(id);
    }

    public List<Identity> execute() {
        return this.identityRepository.findAll();
    }

    public List<Identity> executeFindByFirstName(String firstName) {
        return this.identityRepository.findByFirstName(firstName);
    }

    public List<Identity> executeFindByLastName(String lastName) {
        return this.identityRepository.findByLastName(lastName);
    }

    public List<Identity> executeFindByEmail(String email) {
        return this.identityRepository.findByEmail(email);
    }

    public List<Identity> executeFindByPhone(String phone) {
        return this.identityRepository.findByPhone(phone);
    }

    public List<Identity> executeFindByAddressId(UUID addressId) {
        return this.identityRepository.findByAddressId(addressId);
    }

    public List<Identity> executeFindByGithubLink(String githubLink) {
        return this.identityRepository.findByGithubLink(githubLink);
    }
}
